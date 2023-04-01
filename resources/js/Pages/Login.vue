<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

const form = reactive({
    username: null,
    password: null,
});
function submit() {
    router.post("/login", form);
    // console.log(form);
}
</script>
<template>

    <div className="bg-cyan-700 h-screen flex justify-center items-center">
        <div className="border rounded p-10">
            <h1
                className="text-center text-2xl bold mb-10 uppercase text-white"
            >
                Login
            </h1>
            <form
                className="flex flex-col items-center"
                @submit.prevent="submit"
            >
                <span className="text-xl mb-2">Username</span>
                <input
                    className="h-8 rounded mb-6 text-2xl"
                    v-model="form.username"
                />
                <span className="text-xl mb-2">Password</span>
                <input
                    className="h-8 rounded mb-6 text-2xl"
                    v-model="form.password"
                    type="password"
                />
                <button
                    type="submit"
                    className="border hover:bg-cyan-900 w-fit p-1 rounded text-white"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</template>

<style></style>
