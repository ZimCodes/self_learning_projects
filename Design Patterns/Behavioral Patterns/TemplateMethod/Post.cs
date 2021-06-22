using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TemplateMethod
{
    class Post : Record
    {
        protected override string AfterValidate()
        {
            throw new NotImplementedException();
        }

        protected override string BeforeValidate()
        {
            //Checks if a post was made and if anything has been written on it
            throw new NotImplementedException();
        }

        protected override string FailedValidate()
        {
            throw new NotImplementedException();
        }
    }
}
