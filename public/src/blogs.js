function loadMoreBlogs() {
    const extraBlogs = document.querySelectorAll('.extra-blog');
    const btn = document.getElementById('loadMoreBtn');

    extraBlogs.forEach(blog => blog.classList.remove('hidden'));

    // Hide button after all blogs are shown
    btn.classList.add('hidden');
}