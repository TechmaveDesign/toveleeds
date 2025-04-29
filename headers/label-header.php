<ul class="pageTabs">
    <li><a href="label-in-company.php">Label In Company</a></li>
    <li><a href="label-in-region.php">Label In Region</a></li>
    <li><a href="label-on-inspectors.php">Label On Inspectors</a></li>
    <!-- <li><a href="#">Training</a></li> -->
</ul>
<script>
    // Get current URL path
    const currentUrl = window.location.pathname.split("/").pop();

    // Get all anchor tags inside .pageTabs
    document.querySelectorAll(".pageTabs a").forEach(link => {
        // Check if href matches the current URL
        if (link.getAttribute("href") === currentUrl) {
            link.classList.add("active");
        }
    });
</script>
