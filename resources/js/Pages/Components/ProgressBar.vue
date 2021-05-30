<template>
    <div id="progress-bar">
        <div id="bar" class="w-full bg-gray-400  bg-opacity-25 overflow-hidden">
            <div id="progress" ref="progress" class="px-3" :class="[bgClass, `text-${textPosition}`, customClasses ]" 
                :style="'width:' + width + '%'">
                    <small>{{ width + '%' }}</small>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        bgClass:{type:String, default:'bg-blue-700'},
        width:{type:String, default:'50'},
        textPosition:{type:String, default:'right'},
        customClasses:{type:String, default:''},
    }
}
</script>

<style>

</style>