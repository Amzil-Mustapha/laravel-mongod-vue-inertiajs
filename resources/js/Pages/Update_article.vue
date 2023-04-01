<template>
    <div className="bg-cyan-700 h-screen flex justify-center items-center">
        <div className="border rounded p-10">
            <h1
                className="text-center text-2xl bold mb-10 uppercase text-white"
            >
                Update Article
            </h1>
            <form
                className="flex flex-col items-center"
                @submit.prevent="submit"
            >
                <span className="text-xl mb-2">title</span>
                <input
                    className="h-8 rounded mb-6 text-2xl"
                    v-model="form.title"
                />
                <span className="text-xl mb-2">Body</span>
                <input
                    className="h-8 rounded mb-6 text-2xl"
                    v-model="form.body"
                />
                <button
                    type="submit"
                    className="border hover:bg-cyan-900 w-fit p-1 rounded text-white"
                >
                    Update
                </button>
            </form>
        </div>
    </div>
</template>
<script>
import { router, Link, useForm } from "@inertiajs/vue3";
export default {
    // components: {
    //     Link,
    // },
    props: {
        article: {
            type: Object,
        },
    },
    setup() {
        const form = {
            title: "",
            body: "",
        };

        return { form };
    },
};

function submit() {
    // router.post("/post/update", form);
    console.log('Mustapha');
}
</script>

<style></style>
