<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#04B4AC",
                    },
                },
            },
        };
    </script>
</head>

<body class="mb-48">

    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Create an Article
                    </h2>
                    <p class="mb-4">Post an Article</p>
                </header>

                <form action="">
                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2">Article Title</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />
                    </div>
                
                    <div class="mb-6">
                        <label for="author" class="inline-block text-lg mb-2">Author Name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="author" />
                    </div>
                
                    <div class="mb-6">
                        <label for="category" class="inline-block text-lg mb-2">Category</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="category" />
                    </div>
                
                    <div class="mb-6">
                        <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                            placeholder="Example: Technology, Science, etc" />
                    </div>
                
                    <div class="mb-6">
                        <label for="content" class="inline-block text-lg mb-2">Article Content</label>
                        <textarea class="border border-gray-200 rounded p-2 w-full" name="content" rows="10"
                            placeholder="Enter your article content here"></textarea>
                    </div>
                
                    <div class="mb-6">
                        <label for="image" class="inline-block text-lg mb-2">Article Image</label>
                        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
                    </div>
                
                    <div class="mb-6">
                        <label for="published_date" class="inline-block text-lg mb-2">Published Date</label>
                        <input type="date" class="border border-gray-200 rounded p-2 w-full" name="published_date" />
                    </div>
                
                    <div class="mb-6">
                        <label for="status" class="inline-block text-lg mb-2">Status</label>
                        <select class="border border-gray-200 rounded p-2 w-full" name="status">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                        </select>
                    </div>
                
                    <div class="mb-6">
                        <label for="featured" class="inline-block text-lg mb-2">Featured Article</label>
                        <input type="checkbox" class="border border-gray-200 rounded p-2" name="featured" />
                    </div>
                
                    <div class="mb-6">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Publish Article
                        </button>
                
                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
</body>

</html>