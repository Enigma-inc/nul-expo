<script>
    $(document).ready(function () {
        var owl =$(".sponsors-slide");
        $(".sponsors-slide").owlCarousel({
            margin: 10,
            loop: true,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                840: {
                    items: 4,
                },

            },
            onInitialize: function (element) {
                owl.children().sort(function () {
                    return Math.round(Math.random()) - 0.5;
                }).each(function () {
                    $(this).appendTo(owl);
                });
            }


        });
    });

</script>