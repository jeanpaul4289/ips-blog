<template>
    <div class="modal">
        <div class="modal-content">
            <span class="close" @click="$emit('close')">&times;</span>
            <div class="pagination">
                <p>Step 1 of 2</p>
                <hr class="step active"><hr class="step">
            </div>
            <div class="form">
                <h3>Enter Your Email To Get <span class="green">FREE</span><br> iPhone Photography Email Tips:</h3>
                <input type="text" placeholder="Please enter your email here" />
                <button>Send Me The Tips »</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
    }
</script>
