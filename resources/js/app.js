import "./bootstrap";
import.meta.glob(["../images/**", "../fonts/**"]);
import Alpine from "alpinejs";
import { collapse } from "@alpinejs/collapse";

window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();
