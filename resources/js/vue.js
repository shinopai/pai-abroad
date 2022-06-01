import { createApp } from "vue";
import router from "./route";
import ChatButton from "./components/ChatButton.vue";
import ChatRoom from "./components/ChatRoom.vue";
import BasePage from "./components/BasePage.vue";

const app = createApp(ChatButton);
app.use(router);
app.mount("#chat_vue");

const app2 = createApp(BasePage);
app2.use(router);
app2.mount("#chat_room");
