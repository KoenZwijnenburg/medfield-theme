import {exampleData, JobContract} from "./exampleData";
import {LabelValue} from "./label-value";

const data = exampleData;

export class Job {
    constructor(
        public id: number,
        public title: string,
        public link: string,
        public field: string,
        public city: string,
        public conditions: LabelValue[],
        public about_job: string,
        public about_codefield: string,
    ) {
    }
}


export class Jobs {
    jobs: Job[] = [];
    filteredJobs: Job[] = [];

    constructor(data: JobContract[]) {
        for (let item of data) {
            this.jobs.push(this.createJobFromContract(item));
            this.filteredJobs = this.jobs;
        }
    }

    private createJobFromContract(contract: JobContract): Job {
        return new Job(
            contract.id,
            contract.title.rendered,
            contract.link,
            contract.acf.field,
            contract.acf.city,
            contract.acf.conditions,
            contract.acf.abount_job,
            contract.acf.about_codefield
        )
    }


    filterByCity(filter: string) {
        this.filteredJobs = this.jobs.filter(job => job.city === filter);
    }

    filterByField(filter: string) {
        this.filteredJobs = this.jobs.filter(job => job.field === filter);
    }
}