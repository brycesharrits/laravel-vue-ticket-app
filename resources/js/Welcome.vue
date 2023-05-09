<template>
    <div>
        <h1>Vue Welcome Yall</h1>
        <p>{{testData}}</p>
        <p>value: {{val}}</p>
        <input v-model="addVal" type="text">
        <button @click="add">add</button>
    </div>
</template>

<script>

export default {
    data() {
        return {
            testData: "this is some test data",
            val: 3,
            addVal: 0,
        }
    },
    methods: {
        add() {
            this.val += addVal;
        }
    }
}
</script>
