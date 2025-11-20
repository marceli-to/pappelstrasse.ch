<template>
  <template v-if="formSuccess">
    <success-alert>
      Vielen Dank für Ihre Anfrage!
    </success-alert>
  </template>
  <template v-if="formError">
    <error-alert>
      Bitte überprüfen Sie die eingegebenen Daten.
    </error-alert>
  </template>
  <form @submit.prevent="submitForm">
    <div>
      <form-group>
        <form-checkbox
          v-model="form.apartment_1_5"
          :error="errors.apartments"
          @update:error="errors.apartments = $event"
          id="apartment-1-5"
          name="apartment_1_5"
          label="1.5-Zimmerwohnung"
        />
      </form-group>
      <form-group>
        <form-checkbox
          v-model="form.apartment_2_5"
          :error="''"
          id="apartment-2-5"
          name="apartment_2_5"
          label="2.5-Zimmerwohnung"
        />
      </form-group>
      <form-group>
        <form-checkbox
          v-model="form.apartment_3_5"
          :error="''"
          id="apartment-3-5"
          name="apartment_3_5"
          label="3.5-Zimmerwohnung"
        />
      </form-group>
    </div>
    <div>
      <form-group>
        <form-text-field
          v-model="form.firstname"
          :error="errors.firstname"
          @update:error="errors.firstname = $event"
          :placeholder="errors.firstname ? errors.firstname : 'Vorname*'"
        />
      </form-group>
      <form-group>
        <form-text-field
          v-model="form.name"
          :error="errors.name"
          @update:error="errors.name = $event"
          :placeholder="errors.name ? errors.name : 'Name*'"
        />
      </form-group>
    </div>
    <div>
      <form-group>
        <form-text-field
          v-model="form.street"
          :error="errors.street"
          @update:error="errors.street = $event"
          :placeholder="errors.street ? errors.street : 'Strasse/Nr.*'"
        />
      </form-group>
      <form-group>
        <form-text-field
          v-model="form.location"
          :error="errors.location"
          @update:error="errors.location = $event"
          :placeholder="errors.location ? errors.location : 'PLZ/Ort*'"
        />
      </form-group>
    </div>
    <div>
      <form-group>
        <form-text-field
          type="email"
          v-model="form.email"
          :error="errors.email"
          @update:error="errors.email = $event"
          :placeholder="errors.email ? errors.email : 'E-Mail*'"
        />
      </form-group>
      <form-group>
        <form-text-field
          v-model="form.phone"
          :error="errors.phone"
          @update:error="errors.phone = $event"
          placeholder="Telefon"
        />
      </form-group>
    </div>
    <input type="text" name="website" v-model="form.website" tabindex="-1" autocomplete="off" style="position: absolute; left: -9999px;" />
    <form-group>
      <form-checkbox
        v-model="form.privacy"
        :error="errors.privacy"
        @update:error="errors.privacy = $event"
        id="privacy-contact"
        name="privacy"
        label="Ich habe die Datenschutzerklärung gelesen und akzeptiere diese."
      />
    </form-group>
    <form-group>
      <form-button
        type="submit"
        :label="'ABSENDEN'"
        :disabled="isSubmitting"
        :submitting="isSubmitting"
      />
    </form-group>
  </form>
</template>
<script setup>
import { ref, watch, onMounted } from 'vue';
import axios from 'axios';
import FormGroup from '@/forms/components/fields/group.vue';
import FormTextField from '@/forms/components/fields/text.vue';
import FormButton from '@/forms/components/fields/button.vue';
import FormCheckbox from '@/forms/components/fields/checkbox.vue';
import SuccessAlert from '@/forms/components/alerts/success.vue';
import ErrorAlert from '@/forms/components/alerts/error.vue';
import { useFormScroll } from '@/composables/useFormScroll';
import { useRecaptcha } from '@/composables/useRecaptcha';

const { scrollToForm } = useFormScroll();
const { executeRecaptcha } = useRecaptcha();
const isSubmitting = ref(false);
const formSuccess = ref(false);
const formError = ref(false);
const formStartTime = ref(null);

onMounted(() => {
  formStartTime.value = Date.now();
});

const form = ref({
  apartment_1_5: false,
  apartment_2_5: false,
  apartment_3_5: false,
  name: null,
  firstname: null,
  phone: null,
  street: null,
  location: null,
  email: null,
  privacy: false,
  website: ''
});

const errors = ref({
  apartments: '',
  name: '',
  firstname: '',
  street: '',
  location: '',
  email: '',
  phone: '',
  privacy: '',
});

watch(() => form.value.privacy, (newValue) => {
  if (newValue === true) {
    errors.value.privacy = '';
  }
});

async function submitForm() {
  isSubmitting.value = true;
  formSuccess.value = false;
  formError.value = false;

  try {
    const recaptchaToken = await executeRecaptcha('contact_form');

    const response = await axios.post('/api/contact/submit', {
      ...form.value,
      recaptcha_token: recaptchaToken,
      _start: formStartTime.value
    });
    handleSuccess();
  } catch (error) {
    handleError(error);
  }
}

function handleSuccess() {
  form.value = {
    apartment_1_5: false,
    apartment_2_5: false,
    apartment_3_5: false,
    name: null,
    firstname: null,
    street: null,
    location: null,
    email: null,
    phone: null,
    privacy: false,
    website: '',
  };

  errors.value = {
    apartments: '',
    name: '',
    firstname: '',
    street: '',
    location: '',
    email: '',
    phone: '',
    privacy: '',
  };

  isSubmitting.value = false;
  formSuccess.value = true;
  formStartTime.value = Date.now();
  scrollToForm();
}

function handleError(error) {
  isSubmitting.value = false;
  formError.value = true;

  if (error.response && error.response.data && typeof error.response.data.errors === 'object') {
    Object.keys(error.response.data.errors).forEach(key => {
      errors.value[key] = error.response.data.errors[key];
    });
  }
  scrollToForm();
}
</script>
