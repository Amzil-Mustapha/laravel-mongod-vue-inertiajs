<template>
    <div className="flex flex-col h-screen justify-center items-center">
        <h1 className="text-center text-2xl uppercase m-10">
            Post: <mark>{{ post.title }} </mark>
        </h1>
        <div v-if="articles" className="grid gap-4 grid-cols-3 my-10">
            <div
                v-for="(item, index) in articles"
                className="text-center border bg-violet-800 text-white h-12 rounded-xl flex items-center p-2 justify-between"
            >
                {{ index }} - {{ item.title }}
                <div>
                    <Link
                        className="h-fit w-1/3 text-center p-1 mr-2 bg-red-400 rounded border hover:bg-red-500"
                        href="/article_delete"
                        as="button"
                        >Delete</Link
                    >
                    <Link
                        className="h-fit text-center p-1 bg-green-400 rounded border hover:bg-green-500"
                        method="post"
                        as="button"
                        href="/article/edit"
                        :data="{ id: item._id }"
                        >Edit</Link
                    >
                </div>
            </div>
        </div>

        <!-- <div v-else-if="type === 'B'">B</div>
        <div v-else-if="type === 'C'">C</div>
        <div v-else>Not A/B/C</div> -->

        <Link
            className="h-fit w-1/3 text-center p-1 mb-2 bg-red-400 rounded border hover:bg-red-500"
            href="/logout"
            as="button"
            >Logout</Link
        >
        <Link
            className="h-fit text-center p-1 w-1/3 bg-green-400 rounded border hover:bg-green-500"
            href="/"
            as="button"
            >Back</Link
        >
    </div>
</template>
<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
    props: {
        post: {
            type: Object,
        },
        articles: {
            type: Object,
        },
    },
};
</script>
<style></style>
