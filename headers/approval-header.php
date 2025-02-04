<ul class="pageTabs">
    <li><a href="approval-board.php">All Job Approval Request</a></li>
    <li><a href="all-label-approval.php">All Label Approval Request</a></li>
    <!-- <li><a href="#">NDT Review Jobs</a></li>
    <li><a href="#">Training Jobs</a></li> -->

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
