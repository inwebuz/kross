<template>
    <div class="bg-black text-white relative min-h-screen flex flex-col">
        <PageHeader />
        <main class="flex relative z-20 items-center overflow-hidden flex-grow">
            <slot />
        </main>
        <PageFooter />
    </div>
</template>
<script>
import PageHeader from "../Shared/PageHeader";
import PageFooter from "../Shared/PageFooter";
export default {
    components: { PageHeader, PageFooter }
}
</script>
