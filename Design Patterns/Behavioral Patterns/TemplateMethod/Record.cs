using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TemplateMethod
{
    abstract class Record
    {
        protected bool isCorrectInfo;
        //Template Method
        public void Validate()
        {
            this.BeforeValidate();
            //Database Query Here
            if (isCorrectInfo)
            {
                this.AfterValidate();
            }
            else
            {
                this.FailedValidate();
            }
        }
        //Operations
        protected abstract string BeforeValidate();
        protected abstract string AfterValidate();
        protected abstract string FailedValidate();
    }
}
