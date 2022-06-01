import { createRouter, createWebHistory } from "vue-router";
import ChatRoom from './components/ChatRoom.vue';

const routes = [
  { path: '/rooms/:roomId/chat',
    component: ChatRoom,
    name: 'chat-room',
    props: true
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
