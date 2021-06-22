using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TemplateMethod
{
    class User : Record
    {
        protected override string AfterValidate()
        {
            throw new NotImplementedException();
        }

        protected override string BeforeValidate()
        {
            //Check if user typ in any input for username
            throw new NotImplementedException();
        }

        protected override string FailedValidate()
        {
            throw new NotImplementedException();
        }
    }
}
