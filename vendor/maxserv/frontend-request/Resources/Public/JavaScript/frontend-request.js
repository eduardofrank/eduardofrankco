import AjaxRequest from '@typo3/core/ajax/ajax-request.js';

class FrontendRequest {
    constructor() {
        this._requests = [];
    }

    async request(parameters) {
        const requestKey = JSON.stringify(parameters)
        if (this._requests[requestKey]) {
            return this._requests[requestKey];
        }
        const request = new AjaxRequest(TYPO3.settings.ajaxUrls.frontendrequest_request)
            .post(parameters, {
                headers: {
                    'Content-Type': 'application/json; charset=utf-8'
                }
            })
        this._requests[requestKey] = request;
        return request;
    }

    requestWithEvent(parameters, event) {
        this.request(parameters)
            .then((response) => {
                document.dispatchEvent(new CustomEvent(event, {
                    detail: response
                }));
            })
            .catch((error) => {
                document.dispatchEvent(new CustomEvent(event, {
                    detail: error
                }));
            });
    }
}

const frontendRequest = new FrontendRequest();
export default frontendRequest;
