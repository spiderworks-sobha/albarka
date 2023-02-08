<template>
    <p class="help-block w-100 text-danger">
        <slot></slot>
    </p>
</template>

<script>
    export default {
        props: ['errors'],
    }
</script>