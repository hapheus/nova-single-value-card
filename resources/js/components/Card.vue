<template>
    <Card class="relative p-4">
        <div class="h-6 flex items-center px-6 mb-4">
            <h3 class="mr-3 leading-tight text-sm font-bold">{{ card.title }}</h3>
        </div>

        <div class="mb-5 pb-4">
            <div class="overflow-hidden overflow-x-auto relative">
                <div class="w-full text-4xl text-center">
                    {{ card.value }}
                </div>
            </div>
        </div>
    </Card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
        //
    },
}
</script>
