function like(postId) {
    $.ajax({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: `/like/${postId}`,
        method: "POST",
        data: { "_method": "POST" }
    })
        .done(function (data, status, xhr) {
        console.log(data);
        })
        .fail(function (xhr, status, error) {
        console.log();
        });
    }