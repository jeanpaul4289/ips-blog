<template>
    <div class="modal">
        <div class="modal-content">
            <span class="close" @click="closeModal()">&times;</span>
            <div class="pagination">
                <p>Step 1 of 2</p>
                <hr class="step active"><hr class="step">
            </div>
            <div class="form">
                <h3>Enter Your Email To Get <span class="green">FREE</span><br class="desktop-only"> iPhone Photography Email Tips:</h3>
                <div class="float-container" v-bind:class="{ active: active }" >
                    <label for="float-field" v-bind:class="{ red: !validEmail }">{{ floatFieldText }}</label>
                    <input id="float-field" type="email"  v-model="email"  v-bind:class="{ red: !validEmail }" @focus="active = true" @blur="handleBlur(this)" v-on:keyup.enter="validateEmail()" />
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
