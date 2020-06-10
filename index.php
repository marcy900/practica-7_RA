<!DOCTYPE >
<html>
    <head>
        <script src = "https://aframe.io/releases/1.0.4/aframe.min.js" > 
        </script>
    </head>
    <body>
        <a-scene fog="type: linear; color: #fff"></a-scene>
        <a-scene>

            <img id="texture" src="img/noseqdq.png"/>

            <a-assets>
                <a-asset-item id="crate-obj" src="modelos/cambio.obj" ></a-asset-item>
                <a-asset-item id="crate-mtl" src="modelos/cambio.mtl" ></a-asset-item>
            </a-assets> 

        </a-scene>


        <a-scene>


            <a-entity rotation="0 0 0" animation="property: rotation; to: 0 360 0; loop: true; dur: 10000">
                <a-box position="2 2 -1"  src="#texture"></a-box>
        </a-entity>

 <a-sky  src="img/nube.png" scale=".1 .1 .1" position="0 1 -2"></a-sky>
            
            <a-obj-model src="#crate-obj" mtl="#crate-mtl" scale=".1 .1 .1" width="16" height="9" position="0 1 -1"></a-obj-model>


        </a-scene>
    </body>
</html>