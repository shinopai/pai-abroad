require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// jquery entry file
require("./main");

// google map script file
require("./map");

// vue entry file
require("./vue");
