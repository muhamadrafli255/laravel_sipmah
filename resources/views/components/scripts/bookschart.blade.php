<script type="text/javascript">
    var cdx = document.getElementById("booksChart").getContext('2d');
    var myChart = new Chart(cdx, {
    type: 'pie',
    data: {
        labels: [
            'Baik',
            'Rusak',
            'Hilang'
        ],
        datasets : [{
            label: [
                'Baik',
                'Hilang',
                'Rusak'
            ],
            backgroundColor: [
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(255, 99, 132)',
            ],
            borderColor: [
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(255, 99, 132)',
            ],
            data: [
                {value: {{ $good_count }}, name: 'Baik'},
                {value: {{ $damaged_count }}, name: 'Baik'},
                {value: {{ $lost_count }}, name: 'Baik'}
            ],
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
