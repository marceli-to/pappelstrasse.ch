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
  <form @submit.prevent="submitForm" class="max-w-4xl">
    <h2 class="text-forest text-lg md:text-xl lg:text-2xl">
      Kontaktformular
    </h2>
    <p class="text-xs md:text-sm lg:text-md uppercase text-forest">
      <strong>Ich interessiere mich für (bitte auswählen):</strong>
    </p>
    <div class="mt-3 lg:mt-6">
      <form-group class="flex flex-col gap-y-3 lg:gap-y-6">
        <form-checkbox
          v-model="form.interest"
          :error="errors.interest"
          @update:error="errors.interest = $event"
          id="apartment-1-5"
          name="interest[]"
          label="1.5-Zimmerwohnung"
          value="1.5-Zimmerwohnung"
        />
        <form-checkbox
          v-model="form.interest"
          :error="errors.interest ? ' ' : ''"
          id="apartment-2-5"
          name="interest[]"
          label="2.5-Zimmerwohnung"
          value="2.5-Zimmerwohnung"
        />
        <form-checkbox
          v-model="form.interest"
          :error="errors.interest ? ' ' : ''"
          id="apartment-3-5"
          name="interest[]"
          label="3.5-Zimmerwohnung"
          value="3.5-Zimmerwohnung"
        />
      </form-group>
    </div>
    <div class="md:grid md:grid-cols-2 md:gap-x-20">
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
    <div class="md:grid md:grid-cols-2 md:gap-x-20">
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
    <div class="md:grid md:grid-cols-2 md:gap-x-20">
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
        :label="'Absenden'"
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
  interest: ['1.5-Zimmerwohnung'],
  name: 'Muster',
  firstname: 'Max',
  phone: '079 123 45 67',
  street: 'Musterstrasse 1',
  location: '8000 Zürich',
  email: 'test@example.com',
  privacy: true,
  website: ''
});

const errors = ref({
  interest: '',
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
    interest: [],
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
    interest: '',
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
