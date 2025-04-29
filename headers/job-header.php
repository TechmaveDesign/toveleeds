<ul class="pageTabs">
    <li><a href="inspection-job-order-list.php">Equipment Inspection</a></li>
    <li><a href="job-orders.php">Operator Assessment</a></li>
    <li><a href="ndt-job-order-list.php">NDT Review</a></li>
    <li><a href="training-job-order-list.php">Training</a></li>
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
