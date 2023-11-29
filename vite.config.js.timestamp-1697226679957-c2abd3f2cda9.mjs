// vite.config.js
import { defineConfig } from "file:///D:/PROGRAMS/laragon/www/Repositi/node_modules/vite/dist/node/index.js";
import laravel, { refreshPaths } from "file:///D:/PROGRAMS/laragon/www/Repositi/node_modules/laravel-vite-plugin/dist/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js"
      ],
      refresh: [
        ...refreshPaths,
        "app/Livewire/**"
      ]
    })
  ],
  server: {
    port: 3e3
    // Especifica el puerto que deseas utilizar
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJEOlxcXFxQUk9HUkFNU1xcXFxsYXJhZ29uXFxcXHd3d1xcXFxSZXBvc2l0aVwiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiRDpcXFxcUFJPR1JBTVNcXFxcbGFyYWdvblxcXFx3d3dcXFxcUmVwb3NpdGlcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0Q6L1BST0dSQU1TL2xhcmFnb24vd3d3L1JlcG9zaXRpL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCwgeyByZWZyZXNoUGF0aHMgfSBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogW1xuICAgICAgICAgICAgICAgIC4uLnJlZnJlc2hQYXRocyxcbiAgICAgICAgICAgICAgICAnYXBwL0xpdmV3aXJlLyoqJyxcbiAgICAgICAgICAgIF0sXG4gICAgICAgIH0pLFxuICAgIF0sXG4gICAgc2VydmVyOiB7XG4gICAgICAgIHBvcnQ6IDMwMDAsIC8vIEVzcGVjaWZpY2EgZWwgcHVlcnRvIHF1ZSBkZXNlYXMgdXRpbGl6YXJcbiAgICAgIH0sXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBNFIsU0FBUyxvQkFBb0I7QUFDelQsT0FBTyxXQUFXLG9CQUFvQjtBQUV0QyxJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUN4QixTQUFTO0FBQUEsSUFDTCxRQUFRO0FBQUEsTUFDSixPQUFPO0FBQUEsUUFDSDtBQUFBLFFBQ0E7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsUUFDTCxHQUFHO0FBQUEsUUFDSDtBQUFBLE1BQ0o7QUFBQSxJQUNKLENBQUM7QUFBQSxFQUNMO0FBQUEsRUFDQSxRQUFRO0FBQUEsSUFDSixNQUFNO0FBQUE7QUFBQSxFQUNSO0FBQ04sQ0FBQzsiLAogICJuYW1lcyI6IFtdCn0K
