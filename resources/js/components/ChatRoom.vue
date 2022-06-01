<template>
<div class="h-screen bg-opacity-60">
<div class="flex-1 p:2 sm:p-6 justify-between flex flex-col">
   <div class="flex sm:items-center justify-between p-3 border-b-2 border-gray-200">
      <div class="relative flex items-center space-x-4">
         <div class="relative">
         <img :src="'/images/user-image.jpg'" alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full" width="40" height="40">
         </div>
         <div class="flex flex-col leading-tight">
            <div class="text-2xl mt-1 flex items-center ml-2">
               <span class="text-gray-700 mr-3">{{ partner.name }}</span>
            </div>
            <span class="text-lg text-gray-600 ml-2">{{ partner.email }}</span>
         </div>
      </div>
      <div class="flex items-center space-x-2">
         <button type="button" class="inline-flex items-center justify-center rounded-lg border h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
         </button>
         <button type="button" class="inline-flex items-center justify-center rounded-lg border h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
         </button>
         <button type="button" class="inline-flex items-center justify-center rounded-lg border h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
         </button>
      </div>
   </div>
   <div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
      <div v-for="message in messages" class="chat-message mt-2">
         <div class="flex items-end" :class="[ myself.id == message.user_id ? 'justify-end' : '' ]">
            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
               <div><span class="px-4 py-2 rounded-lg inline-block" :class="[ myself.id == message.user_id ? 'bg-blue-600 text-white' : 'rounded-bl-none bg-gray-300 text-gray-600' ]">{{ message.content }}</span></div>
            </div>
            <template v-if="myself.id == 1">
               <img :src="`/storage/images/${myself.image}`" alt="My profile" class="w-6 h-6 rounded-full order-1">
            </template>
            <template v-else>
               <img :src="'/images/user-image.jpg'" alt="My profile" class="w-6 h-6 rounded-full order-1">
            </template>
         </div>
      </div>

      <!-- <div class="chat-message">
         <div class="flex items-end justify-end">
            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
               <div><span class="px-4 py-2 rounded-lg inline-block bg-blue-600 text-white">Are you using sudo?</span></div>
            </div>
            <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144" alt="My profile" class="w-6 h-6 rounded-full order-2">
         </div>
      </div> -->
   </div>
   <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
      <div class="relative flex">
         <input type="text" v-model="messageText" placeholder="Write your message!" class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3">
         <div class="absolute right-0 items-center inset-y-0 sm:flex">
            <button type="button" class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none" @click="writeMessage">
               <span class="font-bold">Send</span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 ml-2 transform rotate-90">
                  <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
               </svg>
            </button>
         </div>
      </div>
   </div>
   <button class="inline-block w-fit px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out ml-4 cursor-pointer" @click="$router.back()">チャットをやめる</button>
</div>
</div>
</template>

<script>
import { onMounted, ref } from 'vue'
import Axios from 'axios'

Axios.defaults.headers.common = {
  "X-Requested-With": "XMLHttpRequest",
  "X-CSRF-TOKEN": document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content"),
};

export default {
   props: {
      roomId: {
         type: String,
         required: true
      }
   },
   setup(props) {
      const messageText = ref()
      const myself = ref({})
      const partner = ref({})
      const messages = ref({})
      const roomId = props.roomId

   // get room data
    const getRoomData = async () => {
      await Axios.get("/api/room/data?room_id=" + roomId)
                 .then((res) => {
                    myself.value = res.data[0].user
                    partner.value = res.data[1]
                    messages.value = res.data[0].messages
                    console.log(messages.value);
                  })
                 .catch((err) => {
                    console.log(err.response.data.message);
                  });
    }

    // write new message
    const writeMessage = async () => {
       await Axios.post('/api/rooms/' + roomId + '/users/' + myself.value.id + '/write', {
          content: messageText.value
       })
                   .then((res) => {
                      messageText.value = ''
                      getRoomData()
                  })
                  .catch((err) => {
                    console.log(err.response.data.message);
                  });
    }

    onMounted(() => {
       getRoomData()
    })

    return {
       messageText, myself, partner, messages, writeMessage
    }
   },

}
</script>

	<!-- const el = document.getElementById('messages')
	// el.scrollTop = el.scrollHeight -->
