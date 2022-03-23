arr = [0, 'a', 0, 'A', 0, 1.5, 'M', 'C', 8, 3, 1, 'b', 0, 0, 'B']
function check_currentues_small(first_input, second_input) {
    first_current = first_input
    second_current = second_input
    if (typeof (first_current) == 'string') {
        first_current = first_current.charCodeAt()

        if (first_current > 91) {
            first_norm = first_current - 97
        }
        else {
            first_norm = first_current - 65
        }
    }
    else {
        first_norm = first_current
    }
    if (typeof (second_current) == 'string') {
        second_current = second_current.charCodeAt()
        if (second_current > 91) {
            second_norm = second_current - 97
        }
        else {
            second_norm = second_current - 65
        }
    }
    else {
        second_norm = second_current
    }
    if (first_norm == second_norm && typeof (second_input) != 'string') {
        return true
    }
    else if (first_norm == second_norm && second_current > first_current && typeof (first_current) != 'string') {
        return false
    }
    else if (first_norm == second_norm && second_current > first_current) {
        return true
    }
    else if (first_norm > second_norm) {
        return true
    }
    return false
}
// arr=[0,1]
    for (i = 0; i < arr.length; i++) 
    {
        current = arr[i];
        j = i - 1;
        while (j >= 0 && check_currentues_small(arr[j], current)) {
            arr[j + 1] = arr[j];
            j--;
        }
        arr[j + 1] = current;
    }
console.log(arr)