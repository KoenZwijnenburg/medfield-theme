"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Filters = void 0;
var exampleData_1 = require("./exampleData");
var data = exampleData_1.exampleData;
var FilterItem = /** @class */ (function () {
    function FilterItem(label, count) {
        if (count === void 0) { count = 1; }
        this.label = label;
        this.count = count;
    }
    FilterItem.prototype.addCount = function () {
        this.count++;
    };
    return FilterItem;
}());
var FilterType;
(function (FilterType) {
    FilterType["Field"] = "field";
    FilterType["City"] = "city";
})(FilterType || (FilterType = {}));
var Filters = /** @class */ (function () {
    function Filters() {
        this.filters = [
            {
                name: FilterType.Field,
                items: []
            },
            {
                name: FilterType.City,
                items: [],
            }
        ];
    }
    Filters.prototype.setFiltersFromData = function (data) {
        var _this = this;
        data.forEach(function (job) {
            _this.addFilter(job.acf.city, FilterType.City);
            _this.addFilter(job.acf.field, FilterType.Field);
        });
    };
    Filters.prototype.addFilter = function (filter, type) {
        var filterCategory = this.getFilterCategoryByType(type);
        var f = this.getFilterByName(filter, filterCategory);
        if (f) {
            f.addCount();
        }
        else {
            this.createNewFilter(filter, filterCategory);
        }
    };
    Filters.prototype.getFilterByName = function (filterName, filterCategory) {
        var filter = filterCategory.items.filter(function (f) { return f.label === filterName; });
        if (filter && filter.length) {
            return filter[0];
        }
        else {
            return null;
        }
    };
    Filters.prototype.getFilterCategoryByType = function (filterName) {
        return this.filters.filter(function (filter) { return filter.name === filterName; })[0];
    };
    Filters.prototype.filterExists = function (filterName, filterCategory) {
        return filterCategory.items.some(function (f) { return f.label === filterName; });
    };
    Filters.prototype.createNewFilter = function (filter, filterCategory) {
        filterCategory.items.push(new FilterItem(filter));
    };
    return Filters;
}());
exports.Filters = Filters;
//# sourceMappingURL=filter.js.map