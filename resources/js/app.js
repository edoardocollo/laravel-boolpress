import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
import {OBJLoader} from 'three/examples/jsm/loaders/OBJLoader.js';
import {MTLLoader} from 'three/examples/jsm/loaders/MTLLoader.js';

// import {OBJLoader} from 'three-js/addons/OBJLoader.js';
// import {MTLLoader} from 'three-js/addons/MTLLoader.js';


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('articles', require('./components/articles.vue').default);
Vue.component('categories', require('./components/categories.vue').default);
Vue.component('tags', require('./components/tags.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{

      articles:'',

    },
    mounted(){



      axios.get('api/articles').then(response => {
            this.articles = response.data.response;
            let self = this;

            function main() {
              const canvas = document.querySelector('#c');
              const renderer = new THREE.WebGLRenderer({canvas});

              const fov = 50;
              const aspect = 2;  // the canvas default
              const near = 0.1;
              const far = 100;
              const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
              camera.position.z = 10;
              camera.position.y = 7;
              camera.position.x = -35;

              const controls = new OrbitControls(camera, canvas);
              controls.target.set(0, -5, 0);
              controls.update();

              const scene = new THREE.Scene();
              scene.background = new THREE.Color('white');


              const color = 0xFFFFFF;
              const intensity = 2;
              const light = new THREE.DirectionalLight(color, intensity);
              light.position.set(-1, 2, 4);
              scene.add(light);

              const mtlLoader = new MTLLoader();
              mtlLoader.load('ground.mtl', (mtl) => {
                mtl.preload();
                const objLoader = new OBJLoader();
                objLoader.setMaterials(mtl);
                objLoader.load('ground.obj', (root) => {
                  scene.add(root);
                  root.scale.x=21;
                  root.scale.y=21;
                  root.scale.z=21;
                  root.position.y = -0.37;
                });
              });




                const mtlLoader2 = new MTLLoader();
                mtlLoader2.load('seeds.mtl', (mtl) => {
                  mtl.preload();
                  const objLoader = new OBJLoader();
                  objLoader.setMaterials(mtl);
                  objLoader.load('seeds.obj', (text) => {
                    let testo = text;
                    testo.rotation.x = Math.PI / 2;
                    testo.position.y = 9;
                    scene.add(testo);


                  });
                });



              console.log(self.articles.length);
              self.articles.forEach(e => {
                const mtlLoader = new MTLLoader();
                mtlLoader.load('untitled2.mtl', (mtl) => {
                  mtl.preload();
                  const objLoader = new OBJLoader();
                  objLoader.setMaterials(mtl);
                  objLoader.load('untitled2.obj', (root) => {
                    scene.add(root);
                    root.position.x = Math.floor(Math.random() * (20- (-9) + (-9)) ) + (-9);
                    root.position.z = Math.floor(Math.random() * (20- (-9) + (-9)) ) + (-9);
                    root.rotation.y = Math.floor(Math.random() * (360 - 1 + 1) ) + 1;
                  });
                });

              });





              function resizeRendererToDisplaySize(renderer) {
                const canvas = renderer.domElement;
                const width = canvas.clientWidth;
                const height = canvas.clientHeight;
                const needResize = canvas.width !== width || canvas.height !== height;
                if (needResize) {
                  renderer.setSize(width, height, false);
                }
                return needResize;
              }



              function render(time) {
                time *= 0.001;  // convert time to seconds
                // RESPONSIVE
                //////////////////////////////////////////////////////////////////
                if (resizeRendererToDisplaySize(renderer)) {
                  const canvas = renderer.domElement;
                  camera.aspect = canvas.clientWidth / canvas.clientHeight;
                  camera.updateProjectionMatrix();
                }
                ////////////////////////////////////////////////////////////////////



                renderer.render(scene, camera);

                requestAnimationFrame(render);
              }
              requestAnimationFrame(render);
            }

            main();


        }).catch(error => {
            console.log(error);
        })

    },
});



// THREE SECTION


// function main() {
//   const canvas = document.querySelector('#c');
//   const renderer = new THREE.WebGLRenderer({canvas});
//
//   const fov = 50;
//   const aspect = 2;  // the canvas default
//   const near = 0.1;
//   const far = 100;
//   const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
//   camera.position.z = 10;
//   camera.position.y = 7;
//   camera.position.x = -35;
//
//   const controls = new OrbitControls(camera, canvas);
//   controls.target.set(0, -5, 0);
//   controls.update();
//
//   const scene = new THREE.Scene();
//   scene.background = new THREE.Color('white');
//
//
//   const color = 0xFFFFFF;
//   const intensity = 2;
//   const light = new THREE.DirectionalLight(color, intensity);
//   light.position.set(-1, 2, 4);
//   scene.add(light);
//
//   const mtlLoader = new MTLLoader();
//   mtlLoader.load('ground.mtl', (mtl) => {
//     mtl.preload();
//     const objLoader = new OBJLoader();
//     objLoader.setMaterials(mtl);
//     objLoader.load('ground.obj', (root) => {
//       scene.add(root);
//       root.scale.x=21;
//       root.scale.y=21;
//       root.scale.z=21;
//       root.position.y = -0.37;
//     });
//   });
//
//
//
// for (var i = 0; i < 100; i++) {
//   const mtlLoader = new MTLLoader();
//   mtlLoader.load('untitled2.mtl', (mtl) => {
//     mtl.preload();
//     const objLoader = new OBJLoader();
//     objLoader.setMaterials(mtl);
//     objLoader.load('untitled2.obj', (root) => {
//       scene.add(root);
//       root.position.x = Math.floor(Math.random() * (20- (-9) + (-9)) ) + (-9);
//       root.position.z = Math.floor(Math.random() * (20- (-9) + (-9)) ) + (-9);
//       root.rotation.y = Math.floor(Math.random() * (360 - 1 + 1) ) + 1;
//     });
//   });
// }
//
//
//
//
//   function resizeRendererToDisplaySize(renderer) {
//     const canvas = renderer.domElement;
//     const width = canvas.clientWidth;
//     const height = canvas.clientHeight;
//     const needResize = canvas.width !== width || canvas.height !== height;
//     if (needResize) {
//       renderer.setSize(width, height, false);
//     }
//     return needResize;
//   }
//
//
//
//   function render(time) {
//      time *= 0.001;  // convert time to seconds
//     // RESPONSIVE
// //////////////////////////////////////////////////////////////////
//       if (resizeRendererToDisplaySize(renderer)) {
//         const canvas = renderer.domElement;
//         camera.aspect = canvas.clientWidth / canvas.clientHeight;
//         camera.updateProjectionMatrix();
//       }
// ////////////////////////////////////////////////////////////////////
//
//
//
//
//      renderer.render(scene, camera);
//
//      requestAnimationFrame(render);
//    }
//    requestAnimationFrame(render);
// }
//
// main();
