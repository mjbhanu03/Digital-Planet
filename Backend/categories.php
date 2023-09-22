
<!-- component -->
<!-- component -->
<!-- Gogole Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />

<script
    defer
    src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script src="https://cdn-tailwindcss.vercel.app/"></script>

<style>
    section {
        font-family: "Poppins", sans-serif;
    }
</style>
<div class="flex text-4xl font-semibold text-slate-800 w-full justify-center items-center mt-9">
    <h1 >Categories</h1>
</div>
<hr>
<!-- Card List Section -->
<section x-data="xData()" class="  py-9 px-10" data-aos="fade">
    <!-- Card Grid -->
    <div
        class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <template x-for="post in posts">
            <!-- Card Item -->
            <div
                class="my-8 rounded shadow-lg shadow-gray-200  bg-white duration-300 hover:-translate-y-2"
                x-for="(post, index) in posts">
                <!-- Clickable Area -->
                <a :href="post.link" class="cursor-pointer">
                    <figure>
                        <!-- Image -->
                        <img
                            :src="post.image + '?auto=format&fit=crop&w=400&q=50'"
                            class="rounded-t h-72 w-full object-cover" />

                        <figcaption class="p-4">
                            <!-- Title -->
                            <p
                                class="text-lg mb-4 font-bold leading-relaxed text-gray-800 "
                                x-text="post.title">
                                <!-- Post Title -->
                            </p>

                            <!-- Description -->
                            <small
                                class="leading-5 text-gray-500 "
                                x-text="post.description">
                                <!-- Post Description -->
                            </small>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </template>
    </div>
</section>

<script>
    function xData() {
        /**
         * Shuffle an array
         * @param {Array} array
         * @source https://stackoverflow.com/a/2450976/6940144
         */
        function shuffle(array) {
            let currentIndex = array.length,
                randomIndex;

            // While there remain elements to shuffle.
            while (currentIndex != 0) {
                // Pick a remaining element.
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex--;

                // And swap it with the current element.
                [array[currentIndex], array[randomIndex]] = [
                    array[randomIndex],
                    array[currentIndex],
                ];
            }

            return array;
        }

        const posts = [
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1611791484670-ce19b801d192?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGlwaG9uZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
                title: "iPhones",
                description:
                    "Latte art is quite often the most attractive thing for a new barista, and latte art is an excellent gateway to the exciting world of coffee. Latte art easy to start with, but to master latte art patterns, you need a lot practice and determination. Here are my tips that helped me to improve my latte art a few years ago!",
            },
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1593055454503-531d165c2ed8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTIwfHxpcGhvbmUlMjBjb3ZlcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
                title: "Phones Covers",
                description:
                    "Caffé latte and flat white are definitely the most ordered espresso based drinks in cafés around the world but what are they really? Have you ever wondered the difference between caffé latte vs. flat white? Let's see what makes caffé latte and flat white different from each other!",
            },
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1585298723682-7115561c51b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8aGVhZHBob25lc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
                title: "Bluetooth Headphones",
                description:
                    "I bet roasting is the thing that every barista wants to know about! We can develop flavour by roasting coffee. How can we achieve the best tasting coffee? What actually happens when roasting?",
            },
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1608156639585-b3a032ef9689?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZWFycGhvbmVzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
                title: "Wired Handsfree",
                description:
                    "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
            },
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1572721546624-05bf65ad7679?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Q2hhcmdpbmclMjBDYWJsZXN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
                title: "Charging Cables",
                description:
                    "Latte art is quite often the most attractive thing for a new barista, and latte art is an excellent gateway to the exciting world of coffee. Latte art easy to start with, but to master latte art patterns, you need a lot practice and determination. Here are my tips that helped me to improve my latte art a few years ago!",
            },
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1547996160-81dfa63595aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTI5fHxXcmlzdCUyMHdhdGNofGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
                title: "Wrist Watchs",
                description:
                    "Caffé latte and flat white are definitely the most ordered espresso based drinks in cafés around the world but what are they really? Have you ever wondered the difference between caffé latte vs. flat white? Let's see what makes caffé latte and flat white different from each other!",
            },
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1551816230-ef5deaed4a26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c21hcnQlMjB3YXRjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
                title: "Smart Watchs",
                description:
                    "I bet roasting is the thing that every barista wants to know about! We can develop flavour by roasting coffee. How can we achieve the best tasting coffee? What actually happens when roasting?",
            },
            {
                link:"./Frontend/products.php",
                image:
                    "https://images.unsplash.com/photo-1613074004700-0e6e6c606324?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTc3fHxzdW5nbGFzc2VzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60",
                title: "Sunglasses",
                description:
                    "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
            },
        ];

        return {
            posts: [
                ...shuffle(posts),
            ],
        };
    }
</script>