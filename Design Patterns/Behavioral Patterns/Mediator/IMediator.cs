using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Mediator
{
    interface IMediator<T>
    {
        void addColleague(T colleague);
        void MSGOfTheLand(string message, T colleague);
        void PersonalRequest(string request, T colleague);
    }
}
