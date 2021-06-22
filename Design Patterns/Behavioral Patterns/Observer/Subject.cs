using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Observer
{
    enum SubjectState { Happy, Sad }
    class Subject : ISubject
    {
        public List<IObserver> observers { get; set; }
        public SubjectState state;
        public Subject()
        {
            observers = new List<IObserver>();
            state = SubjectState.Happy;
        }
        public void Attach(IObserver observer)
        {
            observers.Add(observer);
        }

        public void Detach(IObserver observer)
        {
            observers.Remove(observer);
        }

        public void Notify()
        {
            foreach (var o in observers)
            {
                o.Update();
            }
        }
    }
}
