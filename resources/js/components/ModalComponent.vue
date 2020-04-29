<template>
    <div class="modal">
        <div class="modal__content">
            <span class="modal__close" @click="closeModal()">&times;</span>
            <div class="modal__pagination">
                <p>Step 1 of 2</p>
                <hr class="modal__step modal__step--active"><hr class="modal__step">
            </div>
            <div class="modal__form">
                <h3 class="modal__title">Enter Your Email To Get <span class="modal__title--green">FREE</span><br class="modal__br--desktop-only"> iPhone Photography Email Tips:</h3>
                <div class="modal__float-container" v-bind:class="{ 'modal__float-container--active': active }" >
                    <label class="modal__label" for="float-field" v-bind:class="{ 'modal__label--red': !validEmail }">{{ floatFieldText }}</label>
                    <input class="modal__input" id="float-field" type="email" v-model="email"  v-bind:class="{ 'modal__input--red': !validEmail }" @focus="active = true" @blur="handleBlur(this)" v-on:keyup.enter="validateEmail()" />
                </div>
                <button @click="validateEmail()">Send Me The Tips »</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                active: false,
                email: '',
                floatFieldText: 'Please enter your email here',
                validEmail: true
            };
        },
        methods : {
            closeModal() {
                this.active = false;
                this.email = '';
                this.validEmail = true;
                this.floatFieldText = 'Please enter your email here';
                this.$emit('close');
            },
            handleBlur() {
                if (!this.email.length) {
                    this.active = false;
                    this.validEmail = true;
                    this.floatFieldText = 'Please enter your email here';
                }
            },
            validateEmail() {
                var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                this.validEmail = re.test(this.email);
                this.floatFieldText = !this.validEmail ? 'Please enter a valid email address' : 'Please enter your email here';
            }
        }
    }
</script>
