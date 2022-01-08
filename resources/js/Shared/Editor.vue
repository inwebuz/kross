<template>
    <div v-if="editor" class="mb-3">
        <button
            type="button"
            @click="editor.chain().focus().toggleBold().run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('bold'), 'border-white text-white': !editor.isActive('bold') }"
        >
            B
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleItalic().run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('italic'), 'border-white text-white': !editor.isActive('italic') }"
        >
            I
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleStrike().run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('strike'), 'border-white text-white': !editor.isActive('strike') }"
        >
            S
        </button>
        <span class="mr-2 text-gray-400">|</span>
        <button
            type="button"
            @click="editor.chain().focus().setParagraph().run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('paragraph'), 'border-white text-white': !editor.isActive('paragraph') }"
        >
            p
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 1 }).run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('heading', { level: 1 }), 'border-white text-white': !editor.isActive('heading', { level: 1 }) }"
        >
            h1
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 2 }).run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('heading', { level: 2 }), 'border-white text-white': !editor.isActive('heading', { level: 2 }) }"
        >
            h2
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 3 }).run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('heading', { level: 3 }), 'border-white text-white': !editor.isActive('heading', { level: 3 }) }"
        >
            h3
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 4 }).run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('heading', { level: 4 }), 'border-white text-white': !editor.isActive('heading', { level: 4 }) }"
        >
            h4
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 5 }).run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('heading', { level: 5 }), 'border-white text-white': !editor.isActive('heading', { level: 5 }) }"
        >
            h5
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 6 }).run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('heading', { level: 6 }), 'border-white text-white': !editor.isActive('heading', { level: 6 }) }"
        >
            h6
        </button>
        <span class="mr-2 text-gray-400">|</span>
        <button
            type="button"
            @click="editor.chain().focus().toggleBulletList().run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('bulletList'), 'border-white text-white': !editor.isActive('bulletList') }"
        >
            List
        </button>
        <!-- <button
            type="button"
            @click="editor.chain().focus().toggleOrderedList().run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('orderedList'), 'border-white text-white': !editor.isActive('orderedList') }"
        >
            List num
        </button> -->
        <button
            type="button"
            @click="editor.chain().focus().toggleBlockquote().run()"
            class="py-1 px-2 text-sm rounded-sm border mr-2 mb-2"
            :class="{ 'bg-white text-black': editor.isActive('blockquote'), 'border-white text-white': !editor.isActive('blockquote') }"
        >
            Blockquote
        </button>
        <span class="mr-2 text-gray-400">|</span>
        <button type="button" @click="editor.chain().focus().undo().run()" class="py-1 px-2 border border-white text-white text-sm rounded-sm">&olarr;</button>
        <button type="button" @click="editor.chain().focus().redo().run()" class="py-1 px-2 border border-white text-white text-sm rounded-sm">&orarr;</button>
    </div>
    <div class="text-block">
        <editor-content :editor="editor" />
    </div>
</template>

<script>
import { Editor, EditorContent } from "@tiptap/vue-3";
import StarterKit from "@tiptap/starter-kit";

export default {
    components: {
        EditorContent,
    },

    props: {
        modelValue: {
            type: String,
            default: "",
        },
    },

    data() {
        return {
            editor: null,
        };
    },

    watch: {
        modelValue(value) {
            // HTML
            const isSame = this.editor.getHTML() === value;

            // JSON
            // const isSame = JSON.stringify(this.editor.getJSON()) === JSON.stringify(value)

            if (isSame) {
                return;
            }

            this.editor.commands.setContent(value, false);
        },
    },

    mounted() {
        this.editor = new Editor({
            extensions: [StarterKit],
            content: this.modelValue,
            onUpdate: () => {
                // HTML
                this.$emit("update:modelValue", this.editor.getHTML());

                // JSON
                // this.$emit('update:modelValue', this.editor.getJSON())
            },
        });
    },

    beforeUnmount() {
        this.editor.destroy();
    },
};
</script>
