import {exampleData} from "./exampleData";
const data = exampleData;

class FilterItem {
    constructor(public label: string, public count: number = 1) {
    }

    addCount() {
        this.count ++;
    }
}

interface Filter {
    name: FilterType,
    items: FilterItem[]
}

enum FilterType {
    Field = 'field',
    City = 'city',
}


export class Filters {
    public filters: Filter[] = [
        {
            name: FilterType.Field,
            items: []
        },
        {
            name: FilterType.City,
            items: [],
        }
    ];

    public setFiltersFromData(data) {
        data.forEach(job => {
            this.addFilter(job.acf.city, FilterType.City);
            this.addFilter(job.acf.field, FilterType.Field);
        })
    }

    private addFilter(filter: string, type: FilterType ) {
        const filterCategory = this.getFilterCategoryByType(type);
        const f = this.getFilterByName(filter, filterCategory);

        if(f){
            f.addCount();
        } else {
            this.createNewFilter(filter, filterCategory);
        }
    }


    private getFilterByName(filterName, filterCategory: Filter): FilterItem {
        const filter = filterCategory.items.filter( f => f.label === filterName);

        if(filter && filter.length){
            return filter[0];
        } else {
            return null;
        }
    }

    private getFilterCategoryByType(filterName: FilterType): Filter {
        return this.filters.filter( filter => filter.name === filterName)[0];
    }


    private filterExists(filterName: string, filterCategory: Filter) {
        return filterCategory.items.some( f => f.label === filterName)
    }

    private createNewFilter(filter: string, filterCategory: Filter) {
        filterCategory.items.push(new FilterItem(filter));
    }
}
