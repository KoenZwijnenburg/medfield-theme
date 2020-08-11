"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Jobs = exports.Job = void 0;
var exampleData_1 = require("./exampleData");
var data = exampleData_1.exampleData;
var Job = /** @class */ (function () {
    function Job(id, title, link, field, city, conditions, about_job, about_codefield) {
        this.id = id;
        this.title = title;
        this.link = link;
        this.field = field;
        this.city = city;
        this.conditions = conditions;
        this.about_job = about_job;
        this.about_codefield = about_codefield;
    }
    return Job;
}());
exports.Job = Job;
var Jobs = /** @class */ (function () {
    function Jobs(data) {
        this.jobs = [];
        this.filteredJobs = [];
        for (var _i = 0, data_1 = data; _i < data_1.length; _i++) {
            var item = data_1[_i];
            this.jobs.push(this.createJobFromContract(item));
            this.filteredJobs = this.jobs;
        }
    }
    Jobs.prototype.createJobFromContract = function (contract) {
        return new Job(contract.id, contract.title.rendered, contract.link, contract.acf.field, contract.acf.city, contract.acf.conditions, contract.acf.abount_job, contract.acf.about_codefield);
    };
    Jobs.prototype.filterByCity = function (filter) {
        this.filteredJobs = this.jobs.filter(function (job) { return job.city === filter; });
    };
    Jobs.prototype.filterByField = function (filter) {
        this.filteredJobs = this.jobs.filter(function (job) { return job.field === filter; });
    };
    return Jobs;
}());
exports.Jobs = Jobs;
//# sourceMappingURL=jobs.js.map