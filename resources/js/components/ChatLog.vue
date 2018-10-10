<template lang="html">
    <div class="chat-log">
    <chat-message v-for="message in messages" :message="message"></chat-message>
    </div>
</template>

<script>
export default {
    data() {
        return {
             messages: [
                {
                    message: 'Hey!',
                    user: "John Doe"
        },
        {
                     message: 'Hello!',
                     user: "Jane Doe"
                 }
            ]
        }
    }

}
</script>


<style lang="css">
.chat-log .chat-message:nth-child(even){
    background-color:#ccc;
}
</style>