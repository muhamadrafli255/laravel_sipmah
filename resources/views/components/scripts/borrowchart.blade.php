<script type="text/javascript">
    var ctx = document.getElementById("borrowChart").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: @php
            echo json_encode($label);
        @endphp,
        datasets : [{
            label: 'Peminjaman',
            backgroundColor: '#ADD8E6',
            borderColor: '#93C3D2',
            data: {{ json_encode($totalBorrows) }}
        }],
        options: {
            animation: {
                onProgress: function (animation) {
                    progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
                }
            }
        }
    }
})
</script>
