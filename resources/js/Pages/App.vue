<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
    props: {
        username: {
            type: String,
        },
    },
};
</script>

<template>
    <div className="flex flex-col h-screen justify-center items-center">
        <h1 className="mb-5 text-2xl ">
            Welcome : <mark>{{ username }}</mark>
        </h1>
        <Link
            className="h-fit w-1/3 text-center p-1 mb-5 rounded border hover:bg-slate-300"
            href="/post"
            >Post</Link
        >
        <Link
            className="h-fit w-1/3 text-center  p-1 mb-5 rounded border hover:bg-slate-300"
            href="/sers"
            >Users</Link
        >
        <Link
            className="h-fit w-1/3 text-center p-1 mb-5 bg-red-400 rounded border hover:bg-red-500"
            href="/logout"
            >Logout</Link
        >
    </div>
</template>

<style></style>
