import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel([
            "resources/css/app.css",
            "resources/js/app.js",
            "resources/js/chart_resume.js",
            "node_modules/chart.js/dist/chart.min.js",
        ]),
    ],
});
