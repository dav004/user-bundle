<template>
    <user-form title="Регистрация" submitText="Зарегистрироваться" url="/signup" @success="success"
               :showForm="showForm">
        <template v-slot:default="slotProps">
            <email-field :form="slotProps.form"/>
            <pass-field :form="slotProps.form"/>
            <captcha :form="slotProps.form" color="a4b0be"/>
        </template>
        <template v-slot:actions>
            <v-btn href="/login" text>Вход</v-btn>
        </template>
        <template v-slot:pre>
            <v-alert v-if="successSignup" :value="true" type="success">
                Вы зарегистрированы!<br>Вам было отправлено письмо для подтверждения адреса.
            </v-alert>
        </template>
    </user-form>
</template>

<script>
    import UserForm from './../component/UserForm';
    import EmailField from './../component/EmailField';
    import PassField from './../component/PassField';
    import Captcha from './../component/Captcha';

    export default {
        components: {PassField, UserForm, EmailField, Captcha},
        data: () => ({
            config: config,
            successSignup: false,
            showForm: true,
        }),
        methods: {
            success() {
                this.showForm = false;
                this.successSignup = true;
            },
        }
    }
</script>
