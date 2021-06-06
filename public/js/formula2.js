function generateRows(pageCount) {
    let rows = [];
    if (!(pageCount % 4)) {
        for (let i = 1; i <= pageCount; i = i + 31) {
            if (pageCount - i >= 32) {
                rows.push(singleRow(i + 1, i + 31));
            } else {
                rows.push(singleRow(i + 1, pageCount));
            }
        }
    }
}

function singleRow(start, end) {
    end = parseInt(end);
    let result1 = [];
    let result2 = [];
    let avg = (start + end) / 2;
    while (start < avg) {
        result1 = [...result1, end, start];
        result2 = [...result2, start + 1, end - 1];
        start = start + 2;
        end = end - 2;
    }

    return {
        'firstRaw': result1.join(','),
        'secondRow': result2.join(',')
    };
}
