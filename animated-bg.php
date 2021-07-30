<style>
html,
body {

    margin: 0;

    padding: 0;
}

.background {

    position:
        absolute;

    display:
        block;

    top: 0;

    left: 0;

    z-index: 0;
}
</style>


<script>
window.
onload
    = function() {
        Particles.
        init
            ({
                selector: '.background',
                connectParticles: true,
                minDistance: 120,
                color: ['#DA0463', '#404B69', '#DBEDF3'],
                speed: 0.5,
                sizeVariations: 3,
                maxParticles: 100,

            });

        // E.g. gets called on a button click
        function pause() {
            particles.pauseAnimation();
        }
        // E.g. gets called on a button click
        function resume() {
            particles.resumeAnimation();
        }
    };
</script>