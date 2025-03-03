<template>
  <div>
    <div class="text-xl font-bold">
      Other Information
    </div>
    <div class="grid grid-cols-1 gap-2">
      <div>
        <FwbCheckbox v-model="form.applying_as_group" label="Are you applying as a group?"/>
        <div class="mt-4">
          <FwbTextarea v-if="form.applying_as_group" v-model="form.group_names" label="Please list their names"/>
        </div>
      </div>
      <div>
        <FwbInput v-model="form.discovery_method" :label="`How did you discover ${page.props.organization.name}`"/>
      </div>
      <div class="mt-4">
        <div class="font-bold">Please select any of the following that apply to you.</div>
        <div class="grid grid-cols-1 mt-4 gap-4">
          <div class="grid grid-cols-1 gap-1">
            <FwbCheckbox v-model="form.convicted_of_felony_misdemeanor" label="Have you ever been convicted of a felony misdemeanor?"/>
            <FwbCheckbox v-model="form.credit_problems_previous_2_years" label="Have you had any credit problems in the last 2 years?"/>
            <FwbCheckbox v-model="form.under_18" label="Are you under 18?"/>
            <FwbCheckbox v-model="form.military_enlistment" label="Have you ever been enlisted in the military?"/>
            <FwbCheckbox v-model="form.bringing_pets" label="Are you bringing any pets?"/>
          </div>
          <FwbTextarea v-model="form.if_yes_any_explain" label="If yes to any of the above, please explain."/>
          <FwbTextarea v-model="form.notes" label="Is there anything else you'd like us to know while considering your application?"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { FwbCheckbox, FwbInput, FwbTextarea } from 'flowbite-vue';
import { useApplicantFormStore } from '../../Stores/ApplicantStore';
import { usePage } from '@inertiajs/vue3';

const form = useApplicantFormStore();

const page = usePage();
</script>