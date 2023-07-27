<?php
include "./adminsidebar.php";
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class=" ml-72 pt-20 ">
        <p class="text-black font-bold text-2xl">Update Banner</p>
        </div>
        <div class="m-3 border w-[77%] p-5 rounded-lg float-right ml-10 text-center shadow-2xl">
<div class="bg-white p7 flex flex-col float-left  items-center  rounded w-[100%] space-y-5">
    <div class="flex items-center">
        <p>Banner 1</p>
        <p class=" ml-10 mr-10">-</p>
<div x-data="dataFileDnD()" class="relative w-[100%] flex flex-col p-4 text-gray-400 border border-black rounded">
    <div x-ref="dnd"
        class="relative flex flex-col text-gray-400 border border-black border-dashed rounded cursor-pointer">
        <input accept="*" type="file" multiple
            class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
            @change="addFiles($event)"
            @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
            @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
            @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
            title="" />
       
        <div class="flex flex-col items-center justify-center py-10 text-center">
           <img src="./resources/lib/img/drop.png" alt="">
            <p class="m-0">Drag your files here or click in this area.</p>
        </div>
    </div>

    <template x-if="files.length > 0">
        <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
            @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
            <template x-for="(_, index) in Array.from({ length: files.length })">
                <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                    style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                    :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                    <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                        <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    <template x-if="files[index].type.includes('audio/')">
                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </template>
                    <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </template>
                    <template x-if="files[index].type.includes('image/')">
                        <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                            x-bind:src="loadFile(files[index])" />
                    </template>
                    <template x-if="files[index].type.includes('video/')">
                        <video
                            class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                            <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                        </video>
                    </template>

                    <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                        <span class="w-full font-bold text-gray-900 truncate"
                            x-text="files[index].name">Loading</span>
                        <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                    </div>

                    <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                        @dragleave="fileDropping = null"
                        :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                    </div>
                </div>
            </template>
        </div>
    </template>
</div>
</div>
<div class="flex items-center">
        <p>Banner 2</p>
        <p class=" ml-10 mr-10">-</p>
<div x-data="dataFileDnD()" class="relative w-[100%] flex flex-col p-4 text-gray-400 border border-black rounded">
    <div x-ref="dnd"
        class="relative flex flex-col text-gray-400 border border-black border-dashed rounded cursor-pointer">
        <input accept="*" type="file" multiple
            class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
            @change="addFiles($event)"
            @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
            @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
            @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
            title="" />
       
        <div class="flex flex-col items-center justify-center py-10 text-center">
           <img src="./resources/lib/img/drop.png" alt="">
            <p class="m-0">Drag your files here or click in this area.</p>
        </div>
    </div>

    <template x-if="files.length > 0">
        <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
            @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
            <template x-for="(_, index) in Array.from({ length: files.length })">
                <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                    style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                    :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                    <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                        <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    <template x-if="files[index].type.includes('audio/')">
                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </template>
                    <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </template>
                    <template x-if="files[index].type.includes('image/')">
                        <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                            x-bind:src="loadFile(files[index])" />
                    </template>
                    <template x-if="files[index].type.includes('video/')">
                        <video
                            class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                            <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                        </video>
                    </template>

                    <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                        <span class="w-full font-bold text-gray-900 truncate"
                            x-text="files[index].name">Loading</span>
                        <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                    </div>

                    <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                        @dragleave="fileDropping = null"
                        :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                    </div>
                </div>
            </template>
        </div>
    </template>
</div>
</div>
<div class="flex items-center">
        <p>Banner 3</p>
        <p class=" ml-10 mr-10">-</p>
<div x-data="dataFileDnD()" class="relative w-[100%] flex flex-col p-4 text-gray-400 border border-black rounded">
    <div x-ref="dnd"
        class="relative flex flex-col text-gray-400 border border-black border-dashed rounded cursor-pointer">
        <input accept="*" type="file" multiple
            class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
            @change="addFiles($event)"
            @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
            @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
            @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
            title="" />
       
        <div class="flex flex-col items-center justify-center py-10 text-center">
           <img src="./resources/lib/img/drop.png" alt="">
            <p class="m-0">Drag your files here or click in this area.</p>
        </div>
    </div>

    <template x-if="files.length > 0">
        <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
            @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
            <template x-for="(_, index) in Array.from({ length: files.length })">
                <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                    style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                    :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                    <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                        <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    <template x-if="files[index].type.includes('audio/')">
                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </template>
                    <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </template>
                    <template x-if="files[index].type.includes('image/')">
                        <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                            x-bind:src="loadFile(files[index])" />
                    </template>
                    <template x-if="files[index].type.includes('video/')">
                        <video
                            class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                            <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                        </video>
                    </template>

                    <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                        <span class="w-full font-bold text-gray-900 truncate"
                            x-text="files[index].name">Loading</span>
                        <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                    </div>

                    <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                        @dragleave="fileDropping = null"
                        :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                    </div>
                </div>
            </template>
        </div>
    </template>
</div>
</div>
<div class=" float-right">
<button class="bg-blue-600 px-4 rounded-md py-1">Save</button>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/create-file-list"></script>
<script>
function dataFileDnD() {
    return {
        files: [],
        fileDragging: null,
        fileDropping: null,
        humanFileSize(size) {
            const i = Math.floor(Math.log(size) / Math.log(1024));
            return (
                (size / Math.pow(1024, i)).toFixed(2) * 1 +
                " " +
                ["B", "kB", "MB", "GB", "TB"][i]
            );
        },
        remove(index) {
            let files = [...this.files];
            files.splice(index, 1);

            this.files = createFileList(files);
        },
        drop(e) {
            let removed, add;
            let files = [...this.files];

            removed = files.splice(this.fileDragging, 1);
            files.splice(this.fileDropping, 0, ...removed);

            this.files = createFileList(files);

            this.fileDropping = null;
            this.fileDragging = null;
        },
        dragenter(e) {
            let targetElem = e.target.closest("[draggable]");

            this.fileDropping = targetElem.getAttribute("data-index");
        },
        dragstart(e) {
            this.fileDragging = e.target
                .closest("[draggable]")
                .getAttribute("data-index");
            e.dataTransfer.effectAllowed = "move";
        },
        loadFile(file) {
            const preview = document.querySelectorAll(".preview");
            const blobUrl = URL.createObjectURL(file);

            preview.forEach(elem => {
                elem.onload = () => {
                    URL.revokeObjectURL(elem.src); // free memory
                };
            });

            return blobUrl;
        },
        addFiles(e) {
            const files = createFileList([...this.files], [...e.target.files]);
            this.files = files;
            this.form.formData.files = [...files];
        }
    };
}
</script>
</body>
</html>