<script src="/js/chosen.jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#selectKategori').chosen();
            $('#selectBooks').chosen({
                search_contains: true,
                no_results_text: "Data tidak ditemukan!",
            });
            $('#selectBooks0').trigger('chosen:updated').chosen({
                search_contains: true,
                no_results_text: "Data tidak ditemukan!",
            }).change();
            $('#selectBooks1').chosen({
                search_contains: true,
                no_results_text: "Data tidak ditemukan!",
            });

            $('#selectBorrower').chosen({
                search_contains: true,
                no_results_text: "Data tidak ditemukan!",
            });
        });
    </script>