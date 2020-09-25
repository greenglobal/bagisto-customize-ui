<template>
    <a :href="referer" class="icon angle-left-icon back-link"></a>
</template>

<script>
    export default {
        props: ['baseUrl'],

        data() {
            return {
                referer: history.length > 1 ? document.referrer : this.baseUrl
            }
        }
    }
</script>
