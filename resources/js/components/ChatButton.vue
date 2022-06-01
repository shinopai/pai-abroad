<template>
<div>
  <template v-if="isExists">
  <router-link
    class="mt-5 w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-center"
    :to="{ name: 'chat-room', params: { roomId: roomId } }"
  >
    チャットルームへ移動
  </router-link>
  </template>
  <template v-else>
  <button
    type="button"
    class="mt-5 w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-center"
    @click="createRoom"
  >
    このホストとチャットする
  </button>
  </template>
</div>
</template>

<script>
import { ref, onMounted } from "vue";
import { useRouter } from 'vue-router';
import Axios from "axios";

Axios.defaults.headers.common = {
  "X-Requested-With": "XMLHttpRequest",
  "X-CSRF-TOKEN": document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content"),
};

export default {
  setup() {
    const isExists = ref(Boolean)
    const roomId = ref()
    const router = useRouter()

    // check if room is exists
    const checkRoomExists = async () => {
      await Axios.get("/api/rooms/check?user_id=" + userId + '&partner_id=' + partnerId)
                 .then((res) => {
                    if(res.data.length > 0){
                      isExists.value = true
                      roomId.value = res.data[0].id
                      console.log(roomId.value);
                    }else{
                      isExists.value = false
                    }
                  })
                 .catch((err) => {
                    console.log(err.response.data.message);
                  });
    }

    checkRoomExists()

    // create new room
    const createRoom = async () => {
      await Axios.post(
        "/api/users/" + userId + "/" + partnerId + "/rooms/create",
        {
          user_id: userId,
          partner_id: partnerId,
        }
      )
        .then((res) => {
          router.push({ name: 'chat-room', params: { roomId: res.data.id }});
        })
        .catch((err) => {
          console.log(err.response.data.message);
        });
    };

    onMounted(() => {
    });

    return {
      isExists, createRoom, roomId
    };
  },
};
</script>
