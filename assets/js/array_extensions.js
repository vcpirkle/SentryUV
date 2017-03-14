quickmiddlesort = (function () {
    /*jshint bitwise: false*/
    "use strict";

    /**
    * Quicksort algorithm. It's with complexity O(n log(n)).
    * In this version of quicksort I use the middle element of the
    * array for pivot.
    */


    /**
    * Quicksort algorithm
    *
    * @public
    * @param {array} array Array which should be sorted.
    * @param {delegate} optional delegate method to return a sortable property of each item in the array.
    * @return {array} Sorted array.
    */

    /**
    * Partitions the array in two parts by the middle elements.
    * All elemnts which are less than the chosen one goes left from it
    * all which are greater goes right from it.
    *
    * @param {array} array Array which should be partitioned
    * @param {number} left Left part of the array
    * @param {number} right Right part of the array
    * @param {delegate} optional delegate method to return a sortable property of each item in the array.
    * @return {number}
    */
    function partition(array, left, right, delegate) {
        var pivot = (delegate == null ? array[(left + right) >>> 1] : delegate.call(this, array[(left + right) >>> 1]));
        while (left <= right) {
            if (delegate != null) {
                while (delegate.call(this, array[left]) < pivot) { left++; }
                while (delegate.call(this, array[right]) > pivot) { right--; }
            }
            else {
                while (array[left] < pivot) { left++; }
                while (array[right] > pivot) { right--; }
            }
            if (left <= right) {
                var temp = array[left];
                array[left++] = array[right];
                array[right--] = temp;
            }
        }
        return left;
    }

    /**
    * Recursively calls itself with different values for
    * left/right part of the array which should be processed
    *
    * @private
    * @param {array} array Array which should be processed
    * @param {number} left Left part of the array which should be processed
    * @param {number} right Right part of the array which should be processed
    */
    function quicksort(array, left, right, delegate) {
        var mid = partition(array, left, right, delegate);
        if (left < mid - 1) {
            quicksort(array, left, mid - 1, delegate);
        }
        if (right > mid) {
            quicksort(array, mid, right, delegate);
        }
    }

    /**
    * Quicksort's initial point
    * @public
    */
    return function (items, delegate) {
        if (typeof (delegate) == 'undefined' || items.length == 0) { delegate = null; }
        quicksort(items, 0, items.length - 1, delegate);
        return items;
    };

}());


Array.prototype.quickSort = function (delegate) {
    if (typeof (delegate) == 'undefined' || this.length == 0) { delegate = null; }
    return quickmiddlesort(this, delegate);
}

/*
* Performs a binary search on the host array. This method can either be
* injected into Array.prototype or called with a specified scope like this:
 * binaryIndexOf.call(someArray, searchElement);
*
* @param {*} searchElement The item to search for within the array.
* @return {Number} The index of the element which defaults to -1 when not found.
*/
Array.prototype.binaryIndexOf = function (searchElement, delegate) {
    'use strict';
    if (typeof (delegate) == 'undefined' || this.length == 0) { delegate = null; }

    var minIndex = 0;
    var maxIndex = this.length - 1;
    var currentIndex;
    var currentElement;

    while (minIndex <= maxIndex) {
        currentIndex = (minIndex + maxIndex) / 2 | 0;
        if (delegate == null)
            currentElement = this[currentIndex];
        else
            currentElement = delegate.call(this, this[currentIndex]);

        if (currentElement < searchElement) {
            minIndex = currentIndex + 1;
        }
        else if (currentElement > searchElement) {
            maxIndex = currentIndex - 1;
        }
        else {
            return currentIndex;
        }
    }

    return -1;
}